**Simple Laravel CRUD**

This repository contains a basic implementation of a CRUD (Create, Read, Update, Delete) system built with Laravel. It is intended for anyone interested in testing, learning, or exploring Laravel-based application development.

**Branching Strategy & Workflow**

This project follows a simplified branching strategy to manage the development and deployment of Laravel CRUD features.

**Main Branch – Production**

The main branch represents the production-ready version of the Laravel CRUD application. No direct development should occur in this branch. Only thoroughly tested and reviewed features from the develop branch are merged into main.

**Feature Branches**

Every time a new theme development is needed, a feature branch will be created from the Develop branch with the name feature/<feature_name>. Only when a feature is finished and is working properly is that it can be merged to the Develop branch and deleted.

**Release Branches**

After testing in PreProduction, the new features are moved to the Main branch via Gitflow releases. A release branch must be named release/<name_of_the_release> and it is then merged to both the Main branch and the Develop branch.

**Hotfix Branches**

Hotfixes are used to apply urgent fixes directly to the production code - hotfix/<hotfix_name>. After applying and testing the fix, the branch should be merged into both main and develop.



                                               **---How To Start Working---**

**Set Up a Local Development Server**

You can use any local development environment such as MAMP, XAMPP, Laragon, or Laravel Valet. Make sure PHP, MySQL, and Composer are properly installed.

**Install Dependencies**

Run the following command to install PHP dependencies: composer install.

**Set Up Environment File**

Copy the .env.example file to .env and configure your database settings: =>cp .env.example .env =>php artisan key:generate

**Run Migrations (Optional: Seed Data)**

If applicable, set up your database and run migrations: =>php artisan migrate =>php artisan db:seed

**Create a Feature or Fix Branch**

For any enhancement or bug fix, create a branch from main: git checkout -b feature/your-feature-name

**Start Development**

Make your changes locally. You can run the Laravel development server with: php artisan serve

**Commit and Push Your Changes**

Once you're done with your changes: =>git add . =>git commit -m "Add: description" =>git push origin feature/your-feature-name

**Create a Pull Request (PR)**

Go to the repository on GitHub and create a Pull Request to merge your feature branch into the develop branch. Ensure your code is reviewed and approved before merging.
