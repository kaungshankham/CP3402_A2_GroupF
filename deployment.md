# Deployment Guide

## Introduction
This document outlines the development and deployment workflow for the Baizonn Learning Center WordPress theme. Follow these guidelines to develop theme updates locally, then test and deploy them to staging and live environments.

## Development Environment Setup
1. **Local Environment**:
   - Install WordPress locally using tools like XAMPP, WAMP, MAMP, or Docker.
   - Clone the theme repository into the `wp-content/themes` directory of your local WordPress installation.

2. **Dependencies**:
   - Ensure all dependencies are installed via Composer and npm by running `composer install` and `npm install` in the theme directory.

## Version Control
- Use Git for version control.
- Regularly commit changes with meaningful commit messages.
- Push changes to the remote repository hosted on GitHub.

## Testing
- Conduct visual and functional testing on your local development environment.
- Use automated testing tools like PHPUnit for PHP code and Jest for JavaScript if applicable.

## Deployment Workflow
1. **Staging Environment**:
   - Push the latest changes from the Git repository to a staging environment using Git hooks or deployment tools like DeployHQ.
   - Ensure that the staging environment closely replicates the live environment.
   - Perform user acceptance testing (UAT) to validate the updates.

2. **Production Deployment**:
   - After testing on the staging environment, deploy the updates to the production environment.
   - Use a CI/CD pipeline to automate the deployment process if possible.

3. **Post-Deployment**:
   - Monitor the live site for any issues.
   - Prepare to rollback if a critical issue arises post-deployment.

## Project Management
- Use tools like Trello to manage tasks and milestones.
- Hold regular meetings to discuss progress and address any issues.


