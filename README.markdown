# Test site - my interests

## Overview

Adrian Leśniak Portfolio is a responsive HTML website showcasing a personal portfolio with a gallery and user list. Built with Bootstrap 5, it features a modern gradient design, animated profile card, and navigation. Styled with Google Fonts and custom CSS for an engaging user experience.

## Features

- **Responsive Navigation**: Sticky navbar with links to Home, Gallery, and Users List, using Bootstrap 5.
- **Profile Card**: Animated card with profile image, name, index number, and welcome message.
- **Modern Design**: Gradient background, Montserrat font, and gold accents for a sleek look.
- **Profile Image**: Hover effects with scaling and shadow for interactivity.
- **Footer**: Contact email and copyright information.
- **SEO**: Meta tags for description, keywords, and author.

## Requirements

- Web browser (e.g., Chrome, Firefox, Safari)
- Internet connection for external resources:
  - Bootstrap 5 CSS (`https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css`)
  - Bootstrap 5 JS (`https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js`)
  - Google Fonts (`Montserrat`)
- Local assets:
  - `tlo.png`: Profile image
  - `favicon.ico`: Favicon
  - (Optional) `galeria.php` and `lista.php` for linked pages

## Setup

1. Clone the repository:

   ```bash
   git clone <repository-url>
   cd <repository-directory>
   ```
2. Ensure the required assets are in place:
   - `tlo.png`: Profile image in the root directory.
   - `favicon.ico`: Favicon in the root directory.
3. Host the site on a web server (e.g., Apache, Nginx) or open `index.html` directly:

   ```bash
   python -m http.server 8000
   ```
4. Access the site at `http://localhost:8000`.

## Usage

1. Open the website in a browser to view the homepage.
2. **Interface**:
   - **Navigation**: Click links to access Home, Gallery, or Users List (requires `galeria.php` and `lista.php`).
   - **Main Card**: View the animated profile card with name, index (154256), and welcome message.
   - **Profile Image**: Hover to see scaling and shadow effects.
   - **Footer**: Find contact email and copyright details.
3. **Actions**:
   - Use the navbar toggler on mobile devices to expand the menu.
   - Click the email link to contact the author.

## File Structure

- `index.html`: Homepage with navigation, profile card, and footer.
- `tlo.png`: Profile image for the main card.
- `favicon.ico`: Website favicon.
- `README.md`: This file, providing project documentation.
- (Assumed) `galeria.php`: Gallery page (not included).
- (Assumed) `lista.php`: Users list page (not included).

## Notes

- The `galeria.php` and `lista.php` pages are referenced but not included; they require backend setup (e.g., PHP server).
- The profile image (`tlo.png`) must exist in the root directory or be replaced with a valid image.
- Bootstrap 5 ensures responsive design; ensure CDN links are accessible.
- The site uses Polish (`lang="pl"`) for content, with English translations in the welcome message.
- The favicon (`favicon.ico`) enhances branding but is optional.
- No JavaScript beyond Bootstrap is used; interactivity relies on CSS animations and hover effects.

## Contributing

Contributions are welcome! To contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Make changes and commit (`git commit -m "Add feature"`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a pull request.

## License

This project is licensed under the MIT License. See the LICENSE file for details.

## Contact

For questions or feedback, open an issue on GitHub or email adrian.lesniak@email.com.