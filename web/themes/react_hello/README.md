# REACT HELLO

## Overview
A React app together with drupal

## Features
- React app
- Drupal backend
- API integration
- User authentication
- User profile management
- User posts management
- User comments management
- User likes management
- User followers management

## Procedure 
Adding react to the drupal
 
Create react folder inside themes folder as we use to do creating new theme.
 
Create info.yml
Create libraries.yml
Create js folder and another one src folder and create a js file there.
 
npm init -y
 
npm i --save react react-dom prop-types
 
npm i --save-dev @babel/core @babel/preset-env @babel/preset-react
 
npm i babel-loader webpack webpack-cli
Create another file in react-app called webpack.config.js and add the code from here https://github.com/kalwar/lando-drupal/blob/main/themes/custom/react_hello/webpack.config.js
 
Create another file in react app called .babelrc
 
Create an empty dist folder inside js folder.
 
Add build and start scripts in the package.json inside scripts to run the app.
"build": "NODE_ENV=production webpack",
    "test": "echo \"Error: no test specified\" && exit 1",
    "start": "webpack --watch"
 
Then
Npm I
Npm start
