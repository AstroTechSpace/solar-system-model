# Solar System Model

![Solar System](https://github.com/AstroTechSpace/solar-system-model/blob/main/assets/solar-system-banner.png)

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Demo](#demo)
- [Installation](#installation)
- [Usage](#usage)
- [Deployment](#deployment)
- [Contributing](#contributing)
- [License](#license)
- [Contact](#contact)

## Introduction

Welcome to the **Solar System Model** project! This web application offers an interactive 3D visualization of our solar system, allowing users to explore planets, moons, and other celestial bodies directly in their browsers. Leveraging modern web technologies and robust backend services, the project ensures a seamless and engaging user experience.

## Features

- **Interactive 3D Models:** Explore the solar system with detailed and interactive 3D representations using Three.js.
- **Responsive Design:** Optimized for various devices and screen sizes.
- **Secure Deployment:** SSL certificates managed by Certbot ensure secure data transmission.
- **Scalable Architecture:** Containerized using Docker and orchestrated with Docker Compose for easy scaling and deployment.
- **RESTful API:** Backend services built with Django REST Framework for efficient data management.
- **Efficient Request Handling:** Nginx configured as a reverse proxy for optimal performance and security.

## Technologies Used

- **Frontend:**
  - HTML5
  - CSS3
  - JavaScript
  - [Three.js](https://threejs.org/) for 3D graphics

- **Backend:**
  - Python
  - [Django](https://www.djangoproject.com/)
  - Django REST Framework

- **DevOps:**
  - Docker
  - Docker Compose
  - Nginx
  - Certbot (Let's Encrypt SSL)

- **Hosting:**
  - VPS server from [Beget](https://beget.com/) (2 cores, 2GB RAM, 30GB SSD)

## Demo

Check out the live demo [here](https://your-domain.com).

![Solar System Demo](https://github.com/AstroTechSpace/solar-system-model/blob/main/assets/demo.gif)

## Installation

### Prerequisites

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)
- Git

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/AstroTechSpace/solar-system-model.git
   cd solar-system-model
