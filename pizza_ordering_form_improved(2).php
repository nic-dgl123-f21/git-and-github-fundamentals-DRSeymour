<?php

// The form should be coded to do the following:

// 1. The webpage (call the PHP file "pizza_ordering_form.php") should have a headline that reads "Pizza Palace Order Submission" X

// 2. The webpage should have a description below the headline that reads "Use the form below to submit your order:" X

// 3. The form should contain an input for the pizza's size (can be "small", "medium", or "large") X

// 4. The form should contain an input for the pizza's topping ("pepperoni", "ham & pineapple", "vegetarian" - you can add more if you like) X

// 5. The form should include a quantity input. X

// 6. The data should be submitted using POST as the method. X

// 7. The form should have the action set to be "confirmation.php" X

// 8. When the data is submitted to "confirmation.php" the following text should be outputted: "Your 2 large pepperoni pizza(s) have been ordered and will be available shortly! Thank you for your business!" (The quantity, size, and topping should output based on the form's selection).

// 9. You don't need to write CSS (unless you'd like to) but make the user experience as nice as you can. Pay attention to what form input types you use ("text", "email", and "password" inputs aren't appropriate here).

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Ordering Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        body {
            margin: 30px;
        }
    </style>
<body>
    <h1>Pizza Palace Order Submission</h1>
    <p>Use the form below to submit your order:</p>
    <form
        method="post"
        action="confirmation.php"
    >
        <div class="size">
            <p><b>Pick your pizza's size:</b></p>
            <div class="small">
                <label for="size">Small</label>
                <input
                    type="radio"
                    id="small"
                    name="size"
                    value="Small"
                    required
                >
            </div>
            <div class="medium">
                <label for="size">Medium</label>
                <input
                    type="radio"
                    id="medium"
                    name="size"
                    value="Medium"
                    required
                >
            </div>
            <div class="large">
                <label for="size">Large</label>
                <input
                    type="radio"
                    id="large"
                    name="size"
                    value="Large"
                    required
                >
            </div>
        </div>

        <div class="topping">
            <p><b>Pick your pizza's topping:</b></p>
            <div class="pepperoni">
                <label for="topping">Pepperoni</label>
                <input
                  type="radio"
                  id="pepperoni"
                  name="topping"
                  value="pepperoni"
                  required
                >
            </div>
            <div class="ham_and_pineapple">
                <label for="topping">Ham & Pineapple</label>
                <input
                    type="radio"
                    id="ham_and_pineapple"
                    name="topping"
                    value="Ham & Pineapple"
                    required
                >
            </div>
            <div class="vegetarian">
                <label for="topping">Vegetarian</label>
                <input
                    type="radio"
                    id="vegetarian"
                    name="topping"
                    value="Vegetarian"
                    required
                >
            </div>
        </div>

        <br>

        <div>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
        </div>

        <br>

        <div>
            <input type="submit" value="Place order">
        </div>
    </form>
</body>
</html>