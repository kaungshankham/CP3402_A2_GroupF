# Development Guidelines

## Introduction
This document serves as a comprehensive guide for the development of the Baizonn Learning Center website. It details the tools, roles, and processes our team has agreed upon to ensure a smooth workflow from development to deployment.

## Tools and Setup

### Visual Studio Code
- **Purpose**: Used for writing and editing HTML, PHP, and other web technologies.
- **Setup**:
  1. Download and install Visual Studio Code from [here](https://code.visualstudio.com/).
  2. Clone the repository: `git clone https://github.com/your-username/baizonnlearningcenter.git`.
  3. Open the project folder in Visual Studio Code to start development.

### Trello
- **Role**: Trello is our project management tool to track all tasks, from development to deployment.
- **Usage**: 
  - Tasks are categorized into lists: To Do, In Progress, Review, and Done.
  - Each task card details the requirements and acceptance criteria.
  - Team members are assigned to cards where they are responsible for the completion of tasks.

### Discord
- **Purpose**: Used for all team communications, meetings, and daily stand-ups.
- **Setup**:
  - A server has been created specifically for this project.
  - Channels are organized by topics such as #general, #development, #issues, and #meetings.

### GitHub
- **Role**: Serves as our version control system and collaboration platform.
- **Workflow**:
  - We use feature branching and pull requests to manage changes.
  - Every pull request must be reviewed and approved by at least one other team member before merging.
  - Continuous Integration (CI) is set up to run tests on commits to the `main` branch.

### Host Stinger
- **Purpose**: Chosen as our web hosting service due to its reliability and support for PHP applications.
- **Deployment Process**:
  - Changes are first pushed to the staging environment on Host Stinger for testing.
  - Once approved by the QA Lead, changes are deployed to the production environment.

## Development Process

1. **Starting the Project**:
   - The project kick-off involved all team members discussing the scope and objectives.
   - Initial roles and responsibilities were defined and assigned during this meeting.

2. **Developing Features**:
   - Developers write HTML and PHP code in Visual Studio Code.
   - Code is tested locally before being pushed to the development branch on GitHub.

3. **Testing and Review**:
   - All features undergo thorough testing in the staging environment hosted on Host Stinger.
   - The QA team reviews and approves the functionality before it moves to production.

4. **Deployment**:
   - Final deployment to the live environment is done after all features are validated in staging.
   - Continuous Deployment practices are utilized to automate the deployment process, reducing manual efforts and errors.

5. **Ongoing Maintenance and Updates**:
   - The team continues to monitor the website for any issues and gathers feedback for future improvements.
   - Regular updates are planned and executed to enhance features and address user needs.

## Documentation
- Documentation is maintained concurrently with development to ensure all processes and updates are recorded accurately. This document will be updated as the project evolves.

## Contact
- For development-related queries, please contact the project lead via Discord or by email at [devteam@example.com](mailto:devteam@example.com).

