<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Login Page</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font and Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        body {
            background-color: #A9C9FF;
            background-image: linear-gradient(180deg, #A9C9FF 0%, #FFBBEC 100%);

            font-family: 'Poppins', sans-serif;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            padding: 2rem;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        .login-title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #375cd8;
        }

        .btn-google {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 10px;
            color: #555;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0.5rem;
            margin-bottom: 1rem;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-google img {
            width: 20px;
            margin-right: 8px;
        }

        .btn-google:hover {
            background-color: #f9f9f9;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #ddd;
        }

        .divider::before {
            margin-right: 0.5em;
        }

        .divider::after {
            margin-left: 0.5em;
        }

        .signup-text {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 14px;
        }

        .signup-text a {
            color: #4e73df;
            text-decoration: none;
            font-weight: bold;
        }

        .signup-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .login-card {
                padding: 1.5rem;
            }

            .login-title {
                font-size: 20px;
            }

            .btn-primary,
            .btn-google {
                font-size: 14px;
            }
        }

        .gsi-material-button {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -webkit-appearance: none;
            background-color: WHITE;
            background-image: none;
            border: 1px solid #747775;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: #1f1f1f;
            cursor: pointer;
            font-family: 'Roboto', arial, sans-serif;
            font-size: 14px;
            height: 40px;
            letter-spacing: 0.25px;
            outline: none;
            overflow: hidden;
            padding: 0 12px;
            position: relative;
            text-align: center;
            -webkit-transition: background-color .218s, border-color .218s, box-shadow .218s;
            transition: background-color .218s, border-color .218s, box-shadow .218s;
            vertical-align: middle;
            white-space: nowrap;
            width: auto;
            max-width: 400px;
            min-width: min-content;
        }

        .gsi-material-button .gsi-material-button-icon {
            height: 20px;
            margin-right: 12px;
            min-width: 20px;
            width: 20px;
        }

        .gsi-material-button .gsi-material-button-content-wrapper {
            -webkit-align-items: center;
            align-items: center;
            display: flex;
            -webkit-flex-direction: row;
            flex-direction: row;
            -webkit-flex-wrap: nowrap;
            flex-wrap: nowrap;
            height: 100%;
            justify-content: space-between;
            position: relative;
            width: 100%;
        }

        .gsi-material-button .gsi-material-button-contents {
            -webkit-flex-grow: 1;
            flex-grow: 1;
            font-family: 'Roboto', arial, sans-serif;
            font-weight: 500;
            overflow: hidden;
            text-overflow: ellipsis;
            vertical-align: top;
        }

        .gsi-material-button .gsi-material-button-state {
            -webkit-transition: opacity .218s;
            transition: opacity .218s;
            bottom: 0;
            left: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
        }

        .gsi-material-button:disabled {
            cursor: default;
            background-color: #ffffff61;
            border-color: #1f1f1f1f;
        }

        .gsi-material-button:disabled .gsi-material-button-contents {
            opacity: 38%;
        }

        .gsi-material-button:disabled .gsi-material-button-icon {
            opacity: 38%;
        }

        .gsi-material-button:not(:disabled):active .gsi-material-button-state,
        .gsi-material-button:not(:disabled):focus .gsi-material-button-state {
            background-color: #303030;
            opacity: 12%;
        }

        .gsi-material-button:not(:disabled):hover {
            -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
            box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
        }

        .gsi-material-button:not(:disabled):hover .gsi-material-button-state {
            background-color: #303030;
            opacity: 8%;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <div class="login-card">
            <h2 class="login-title">Login to Your Account</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" autocomplete="current-password" class="form-control"
                        id="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>

            <div class="signup-text">
                Don't have an account? <a href="/register">Sign up</a> – it's completely free!
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
