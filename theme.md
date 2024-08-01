# Baizonn Learning Center Theme Development Guide

## Introduction

This guide is designed to assist developers in continuing the development and maintenance of the Baizonn Learning Center WordPress theme. It includes relevant information about the theme's features, important files, design decisions, and customization options specific to this theme.

## Theme Features

### Key Features
- **Responsive Design**: Ensures that the site is accessible and visually appealing on all devices, including desktops, tablets, and smartphones.
- **Customizable Header and Footer**: Through WordPress Customizer, users can easily modify the header and footer sections.
- **Enhanced Navigation**: Includes a sticky header feature for improved user navigation as they scroll through the site.
- **Dynamic Content Display**: Templates like `index.php` and `single.php` are designed to dynamically display posts and articles.
- **Advanced Search Functionality**: Custom `search.php` template to enhance search result displays.
- **Event Management**: Integration with The Events Calendar plugin for managing and displaying events.

### Plugins Used
- **Smart Slider 3**: For creating responsive sliders.
- **WPForms**: For creating and managing forms.
- **The Events Calendar**: For managing and displaying events on the site.

## Important Files

### `header.php`
- Contains the header section and primary navigation menu.
- Integrates with WordPress Customizer for easy modifications.

### `footer.php`
- Contains the footer section, which includes widget areas for dynamic content.

### `functions.php`
- Handles theme setup, script and style enqueuing, and custom functionality.
- Registers navigation menus, widget areas, and theme support features.

### `index.php`
- The main template file for displaying a list of recent posts or articles.

### `search.php`
- Custom template for displaying search results.

### `single.php`
- Template for displaying individual posts with detailed metadata and comments.

### `404.php`
- Template for displaying a custom 404 error page.

### `archive.php`
- Template for displaying archive pages based on date, category, or tag.

### `front-page.php`
- Custom front-page template for the main landing page.

### `style.css`
- Main stylesheet containing base styles, responsive design, and custom styles for various theme components.

## Design Decisions

### Colors
The Baizonn Learning Center theme primarily uses the following colors:
- **Primary Color**: `#285CB4` (Blue)
- **Secondary Color**: `#04a96a` (Green)
- **Accent Color**: `#0fbb87` (Light Green)

### Typography
- **Font Family**: 'Josefin Sans', sans-serif.

### Layout and Styling
- **Responsive Design**: Utilizes CSS media queries to ensure a seamless experience across different devices.
- **Custom Scrollbars**: Styled to match the theme’s color scheme for a consistent user interface.

## Customization

### Modifying Header and Footer
- Use the WordPress Customizer to update header and footer elements via `Appearance > Customize`.
- Edit `header.php` and `footer.php` for more advanced customization.

### Updating Styles
- Modify `style.css` to change the appearance of the site. Use the primary, secondary, and accent colors consistently to maintain design coherence.

### Adding Custom Functionality
- Use `functions.php` to add custom functionality or modify existing features. Ensure any new functions are well-documented for future developers.

## Conclusion

This guide provides the necessary information to continue developing and maintaining the Baizonn Learning Center WordPress theme. By following the outlined structure and customization options, developers can ensure the site remains functional, visually appealing, and up-to-date with the latest features and content. For advanced customizations or technical issues, consulting with a senior developer or WordPress expert is recommended.
