# Gu3ss3r Project

Welcome to the Gu3ss3r project repository! This is a simple guessing number game implemented in PHP using the Symfony framework. The project employs various algorithms to guess the user's chosen number within a given range as quickly as possible.

## Table of Contents

- [Introduction](#introduction)
- [Getting Started](#getting-started)
- [Algorithms](#algorithms)
- [Usage](#usage)
- [Contributing](#contributing)

## Introduction

Gu3ss3r is a Symfony-based PHP application that demonstrates different algorithms for guessing a user's chosen number within a specified range. The application provides multiple algorithms, each with its own approach to make educated guesses. It's a fun project to explore different strategies for solving the same problem.

## Getting Started

To run this project locally, you'll need:

1. PHP installed on your system.
2. Symfony CLI tool for setting up and running Symfony applications.

Follow these steps to get started:

1. Clone the repository:
   ```bash
   git clone https://github.com/mele13/Gu3ss3r.git
   cd Gu3ss3r
   ```
2. Install dependencies:
    ```bash
    composer install
    ```
3. Run the Symfony development server:
    ```bash
    symfony server:start
    ```
4. Open your web browser and visit: http://127.0.0.1:8000

## Algorithms
The project includes the following guessing algorithms:

- Half Algorithm: Divides the range in half and guesses accordingly.
- Thirds Algorithm: Divides the range into thirds and guesses based on the user's chosen section.
- Random Algorithm: Makes random guesses within the range.
- Blend Algorithm: A blend of various approaches for a balanced guess.

Feel free to explore the source code to understand how each algorithm is implemented.

## Usage
Once the application is up and running, open your web browser and visit the provided URL.
Input a number within the specified range.
The application will demonstrate each algorithm's approach to guessing your chosen number.
Observe the number of attempts and the chosen numbers for each algorithm.

## Contributing
Contributions are welcome! If you have improvements or new algorithms to add, please follow these steps:

1.  Fork the repository.
2. Create a new branch: git checkout -b feature/new-algorithm
3. Make your changes and test thoroughly.
4. Commit your changes: git commit -m 'Add new algorithm'
5. Push to the branch: git push origin feature/new-algorithm
6. Create a pull request explaining your changes.

--------------------------------------------------

Feel free to explore, learn, and have fun with the Gu3ss3r project! If you have any questions or suggestions, please open an issue on this repository.
