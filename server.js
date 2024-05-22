// server.js

const express = require('express');
const mongoose = require('mongoose');

const app = express();
const PORT = process.env.PORT || 3000;

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/registrationDB', {
  useNewUrlParser: true,
  useUnifiedTopology: true
})
  .then(() => console.log('Connected to MongoDB'))
  .catch(err => console.error('Error connecting to MongoDB:', err));

// Define a schema for user registration
const userSchema = new mongoose.Schema({
  phoneNumber: String,
  email: String,
  password: String
});

// Create a model based on the schema
const User = mongoose.model('User', userSchema);

// Middleware to parse JSON bodies
app.use(express.json());

// Handle registration requests
app.post('/register', async (req, res) => {
  try {
    // Extract registration data from request body
    const { phoneNumber, email, password } = req.body;

    // Create a new user document
    const newUser = new User({
      phoneNumber,
      email,
      password
    });

    // Save the user document to the database
    await newUser.save();

    // Send a success response
    res.status(201).send('User registered successfully');
  } catch (error) {
    // Send an error response if registration fails
    console.error('Error registering user:', error);
    res.status(500).send('Error registering user');
  }
});

// Start the server
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});