<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="stylesheet" href="css/uikit-rtl.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>

    <script src="js/jquery-3.6.2.min.js"></script>
    <title>فرم ایجاد اکانت</title>
</head>
<body>
    <header class="uk-container uk-text-center uk-flex uk-flex-center uk-flex-middle uk-position-top-center">
        <h1 class="uk-text-bold uk-h2 uk-margin-large-top">
            ساخت اکانت
        </h1>
    </header>
    <main class="uk-container uk-position-center uk-padding-small uk-box-shadow-large bg-white">
        <form action="#" method="get" enctype="multipart/form-data" class="uk-form-controls">
            <div>
                <label for="username" class="uk-form-label uk-text-bold">
                    نام کاربری
                </label>
                <input type="text" class="uk-input uk-border-rounded uk-box-shadow-medium" id="username" name="username" pattern="[A-Z,a-z]{5,}" placeholder="نام کاربری"/>
            </div>
            <div class="uk-margin-medium-top">
                <label for="password" class="uk-form-label uk-text-bold">
                    رمز عبور
                </label>
                <input type="password" class="uk-input uk-border-rounded uk-box-shadow-medium" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="رمز عبور" required/>
            </div>
            <div class="uk-margin-medium-top">
                <label for="confirm-password" class="uk-form-label uk-text-bold">
                    تکرار رمز عبور
                </label>
                <input type="password" class="uk-input uk-form-danger uk-border-rounded uk-box-shadow-medium" id="confirm-password" name="confirm-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="تکرار رمز عبور" required/>
            </div>
            <div class="uk-margin-medium-top uk-position-relative" id="btn">
                <input type="submit" id="submit" name="submit" class="uk-button uk-button-small uk-button-secondary uk-border-rounded uk-position-relative" value="ثبت نام"/>
            </div>
        </form>
    </main>

<script src="js/uikit.min.js"></script>
<script src="js/uikit-icons.min.js"></script>
<script src="js/style.js"></script>
</body>
</html>