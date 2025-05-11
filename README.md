# Themed Example Project

This repository serves as an example usage and demonstration for the [Themed](https://github.com/skuilplek/themed) PHP component library. Themed is a framework designed to simplify the creation of reusable, themeable UI components for web applications.

## Purpose

This project showcases how to integrate and utilize the Themed library in a real-world scenario. It provides practical examples of various components, allowing developers to see how they can be implemented and customized within their own projects.

## Getting Started

Follow these instructions to set up and run the project locally using Docker:

### Prerequisites

- [Docker](https://www.docker.com/get-started) installed on your machine

### Installation

1. **Clone the Repository** (if you haven't already):
   ```bash
   git clone https://github.com/skuilplek/themed-examples.git
   ```

2. **Navigate to the project directory**:
   ```bash
   cd themed-examples
   ```

3. **Create the .env file**:
   ```bash
   cp .env.example .env
   ```

4. **Build and Start the Containers**:
   ```bash
   docker compose up --build
   ```
   This command will build the Docker images and start the containers. It may take a few minutes the first time.

5. **Access the Application**:
   Once everything is set up, you can access the application in your web browser at:
   ```
   http://localhost:8080/
   ```

### Usage

- Navigate through the various components showcased in the application.
- Check the source code in the `examples` directory to see how components are implemented.
- Customize or extend components as needed for your own projects.

## Additional Resources

- [See the Themed GitHub Repository](https://github.com/skuilplek/themed) for more details on the library itself.

## License

This project is licensed under the terms detailed in [LGPLv3+](./LICENSE.md).