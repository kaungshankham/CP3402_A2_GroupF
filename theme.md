# Theme Documentation for Baizonn Learning Center

## Overview
This document serves as a guide for the custom WordPress theme developed for the Baizonn Learning Center website. It details the features, file structure, design decisions, and customization guidelines specific to this theme.

## Theme Features
- **Responsive Design**: Ensures the website is accessible and performs well on devices of all sizes.
- **Custom Widgets**: Includes widgets designed specifically for educational content, like upcoming events and featured programs.
- **SEO Optimized**: The theme is built with SEO best practices to help improve the visibility of the site on search engines.

## File Structure
The theme is organized into several key directories and files. Here’s an overview of the most important files and their purposes:

- **`style.css`**: Contains the main stylesheet for the theme. This file includes the header information that WordPress uses to manage the theme.
- **`functions.php`**: Used to define theme-specific functions and to enqueue styles and scripts.
- **`index.php`**: The main template file that serves as the fallback for any queries that don't have a specific template file.
- **`header.php`** and **`footer.php`**: Define the global header and footer of the theme.
- **`page.php`**, **`single.php`**: Template files for displaying single pages and single posts.
- **`archive.php`**: Manages the display of archive-type pages including categories and tags.

## Design Decisions
- **Color Scheme**:
  - Primary Color: `#0056b3` (Blue) - Used for headers, important buttons, and links.
  - Secondary Color: `#ffffff` (White) - Used for backgrounds and text areas to ensure readability.
  - Accent Color: `#f2f2f2` (Light Grey) - Used for footer backgrounds and less important elements.

- **Typography**:
  - **Headings**: Arial, sans-serif - Bold and large for clarity.
  - **Body Text**: Helvetica, sans-serif - Standard weight and size for comfortable reading.

- **Layout**:
  - The theme uses a grid-based layout to maintain structure and balance across the site.
  - Content is strategically placed to capture user attention and guide them through the site effectively.

## Customizing the Theme
To customize the theme, you should follow these steps:

1. **Create a Child Theme**: To ensure updates do not overwrite your customizations, create a child theme based on this theme.
2. **Modify CSS**: Make stylistic changes by editing the `style.css` of the child theme.
3. **Edit PHP Files**: To change or extend the functionality, edit the PHP files in the child theme. Always ensure that changes adhere to WordPress coding standards.

## Important Notes
- Do not directly edit the main theme files; instead, use a child theme to make changes.
- Always backup the site before making significant changes.
- Test changes on a staging environment before applying them to the live site.

## Support
For further assistance or more detailed information about specific features or issues, please refer to the online documentation or contact the theme development team at [devteam@example.com](mailto:devteam@example.com).
