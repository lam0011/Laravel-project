# Loan Eligibility Calculator

This project is a **Loan EMI Calculator** built using **Laravel** and **Tailwind CSS**. The application allows users to calculate their monthly EMI (Equated Monthly Installment) based on the loan amount, interest rate, and tenure. The project also includes features for checking loan eligibility and user account management.

## Features

### 1. EMI Calculator
- Accepts user inputs for **Loan Amount**, **Interest Rate**, and **Loan Tenure**.
- Calculates and displays the monthly EMI.

### 2. User Authentication
- Users can log in and log out securely.
- Displays personalized greetings and account details.

### 3. Loan Eligibility Checker
- Users can navigate to check their loan eligibility.

### 4. Responsive and Modern UI
- Built with **Tailwind CSS** for a clean, responsive, and interactive design.
- Includes animations and hover effects for an enhanced user experience.

## Tech Stack

- **Backend**: [Laravel](https://laravel.com/)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/)
- **Database**: MySQL or any Laravel-compatible database.

## Installation

### Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL or any other Laravel-compatible database
- Node.js and npm (for frontend dependencies)

### Steps

1. Clone this repository:
   ```bash
   git clone https://github.com/lam0011/Laravel-project.git
   cd loan-emi-calculator
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Configure environment variables:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials and other environment settings.

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Run migrations:
   ```bash
   php artisan migrate
   ```

6. Compile frontend assets:
   ```bash
   npm run dev
   ```

7. Start the server:
   ```bash
   php artisan serve
   ```

## Usage

1. Visit the application in your browser (default: `http://localhost:8000`).
2. Log in using your credentials.
3. Navigate to the **Calculate EMI** page.
4. Enter loan details and calculate your EMI.
5. Use additional features like checking loan eligibility and logging out.

## Project Structure

- **`resources/views`**: Contains Blade templates for the frontend.  
- **`routes/web.php`**: Defines application routes.  
- **`app/Http/Controllers`**: Contains controllers for handling business logic.  
- **`public/css` and `public/js`**: Compiled CSS and JS files.

## Screenshots

### EMI Calculation Page

![EMI Calculation Page](https://via.placeholder.com/800x400?text=EMI+Calculation+Page)

### User Account Dashboard

![User Account Dashboard](https://via.placeholder.com/800x400?text=User+Account+Dashboard)

## Contributing

Contributions are welcome!

1. Fork the repository.  
2. Create a new feature branch:  
   ```bash
   git checkout -b feature-name
   ```  
3. Commit your changes:  
   ```bash
   git commit -m "Add feature name"
   ```  
4. Push to the branch:  
   ```bash
   git push origin feature-name
   ```  
5. Open a pull request.

