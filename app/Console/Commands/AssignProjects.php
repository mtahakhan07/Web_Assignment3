<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Project;
use App\Models\Evaluator;

class AssignProjects extends Command
{
    protected $signature = 'assign:projects';
    protected $description = 'Assign projects to evaluators based on preferences';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $projects = Project::all();
        $evaluators = Evaluator::with('preferences')->get();

        foreach ($projects as $project) {
            $bestMatch = null;
            $maxMatches = 0;

            foreach ($evaluators as $evaluator) {
                $matches = $this->countMatches($project->keywords, $evaluator->preferences);

                if ($matches > $maxMatches) {
                    $bestMatch = $evaluator;
                    $maxMatches = $matches;
                }
            }

            if ($bestMatch) {
                // Assign the project to the best matching evaluator
                $project->evaluator_id = $bestMatch->id;
                $project->save();
            }
        }

        $this->info('Projects have been successfully assigned.');
    }


    private function countMatches($keywords, $preferences)
    {
        // Assuming both $keywords and $preferences are arrays
        return count(array_intersect($keywords, $preferences->pluck('name')->toArray()));
    }

}
