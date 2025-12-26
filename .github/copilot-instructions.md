# Copilot Instructions for Dona Lavanderia App

## Project Overview
This is an Electron desktop application for managing a laundry business ("Dona Lavanderia"). It combines web technologies (HTML/CSS/JS) for the UI with PHP backend for data processing and MySQL database storage.

## Architecture
- **Frontend**: HTML pages in `src/pages/editor/` loaded into Electron BrowserWindow
- **Backend**: PHP scripts (e.g., `processar-dados.php`) handle form submissions and database operations
- **Database**: MySQL database "lista_clientes" with table "clientes" (fields: cliente, endereco, telefone, observacoes, data, hora)
- **Entry Point**: `main.js` creates Electron window loading `src/pages/editor/index.html`

## Key Workflows
- **Run App**: `npm start` launches Electron app
- **Database Setup**: Ensure XAMPP MySQL is running with database "lista_clientes"
- **PHP Execution**: Scripts run via XAMPP localhost (forms submit to PHP files)
- **Navigation**: Intra-app links between HTML pages (index.html, clientes.html, etc.)

## Conventions
- **Language**: Portuguese (pt-br) - use Portuguese for UI text, comments, and database field names
- **Styling**: Dark theme (#0f0f1e background, #ff00bf accent), Montserrat font, Orbitron for logo
- **File Paths**: Use relative paths for assets (e.g., `../../../img/donalogo.png` instead of absolute C:\ paths)
- **Forms**: POST to PHP scripts for data insertion (see `clientes.html` -> `processar-dados.php`)
- **Database Connection**: Hardcoded localhost MySQL credentials (root, no password)
- **Electron Menu**: Custom menu in Portuguese using Electron's Menu API

## Patterns
- **Page Structure**: Header with logo and nav, main content area
- **CSS Classes**: `.container`, `.formulario`, `.client-form` for layout
- **PHP Data Handling**: Use prepared statements for MySQL inserts (bind_param with "ssssss")
- **Date/Time**: Format as "d/m/Y" and "H:i:s" in PHP

## Key Files
- `main.js`: Electron main process setup
- `src/pages/editor/index.html`: Home page with orders table
- `src/pages/editor/clientes.html`: Client addition form
- `processar-dados.php`: PHP script for inserting client data
- `styles.css`: Global styles with dark theme and hover effects</content>
<parameter name="filePath">c:\xampp\htdocs\appdona\.github\copilot-instructions.md