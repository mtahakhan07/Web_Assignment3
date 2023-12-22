# Open House Management Platform

## About The Project

The Open House Management Platform is a comprehensive solution designed for NUST-SEECS to facilitate the showcasing of Final Year Projects (FYP) by students. The platform allows evaluators from industry and academia to efficiently assess projects based on their expertise and preferences.

### Built With

- [Laravel](https://laravel.com/)
- [Tailwind CSS](https://tailwindcss.com/)


## Getting Started

To get a local copy up and running, follow these simple steps.

### Prerequisites

- PHP >= 7.3
- Composer

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/your_username_/openhouse-project.git

2. Install Composer dependencies
   ```sh
   composer install

3. Copy .env.example to .env and configure your environment
   ```sh
   cp .env.example .env

4. Generate an application key
   ```sh
   php artisan key:generate

5. Run migrations
   ```sh
   php artisan migrate

### Usage
This platform is intended to be used for managing the annual Open House event at NUST-SEECS. It allows for:

- User Management: Accounts for guests (evaluators), FYP groups, and an admin.
- Project Assignment: Automated assignment of projects to evaluators based on preferences.
- Evaluation Process: Facilitates evaluators in rating projects.
- Student Access: Students can view the number of evaluations their project has received.


### Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

### Project Link
https://github.com/mtahakhan07/Web_Assignment3.git

### Acknowledgements
Laravel: https://laravel.com/
Tailwind CSS: https://tailwindcss.com/


