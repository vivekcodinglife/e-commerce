<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email Template</title>
    <style>
        /* Reset styles for cross-client compatibility */
        body,
        body table,
        body td,
        body p,
        body a,
        body li,
        body blockquote {
            -webkit-text-size-adjust: none !important;
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        /* Body padding */
        body {
            padding: 20px;
        }

        /* Main email wrapper */
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f5f5f5;
            padding: 20px;
        }

        /* Email content */
        .email-content {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        /* Heading */
        .email-heading {
            margin-bottom: 20px;
        }

        /* Body text */
        .email-body {
            margin-bottom: 20px;
        }

        /* Button */
        .email-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }

        /* Footer */
        .email-footer {
            margin-top: 20px;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-content">
            <h2 class="email-heading">Welcome to Our Newsletter!</h2>
            <p class="email-body">Thank you for subscribing to our newsletter. Stay tuned for the latest updates and news.</p>
            <a class="email-button" href="#">Unsubscribe</a>
        </div>
        <p class="email-footer">This email was sent to you by Example Company. If you no longer wish to receive these emails, you can <a href="#">unsubscribe</a>.</p>
    </div>
</body>
</html>

