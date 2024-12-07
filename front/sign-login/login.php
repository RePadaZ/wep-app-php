<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=1.0">
        <title>My web-site</title>
        <link href="../bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"/>
        <link href="../css/style.css" rel="stylesheet"/>
    </head>
    <body class="bg-dark-subtle">
        <main class="row py-lg-5">
            <section class="row py-lg-5">
                <div class="d-flex align-items-center gradient-custom-2">
                    <div class="container-lg">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <div class="card">
                                    <div class="card-body p-5">
                                        <h2 class="text-uppercase text-center mb-5">
                                            Login your account
                                        </h2>
                                        <form>
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="text" id="form3Example1cg"
                                                       class="form-control form-control-lg"
                                                       placeholder="Login"
                                                />
                                                <label class="form-label" for="form3Example1cg">
                                                    Your Login
                                                </label>
                                            </div>
                                            <div data-mdb-input-init class="form-outline mb-4">
                                                <input type="password" id="form3Example4cg"
                                                       class="form-control form-control-lg"
                                                />
                                                <label class="form-label" for="form3Example4cg">
                                                    Password
                                                </label>
                                            </div>
                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox"
                                                       value="" id="form2Example3cg"
                                                />
                                                <label class="form-check-label" for="form2Example3cg">
                                                    Remember login details
                                                </label>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                        class="btn btn-success btn-block btn-lg text-body custom-button-style">
                                                    Login
                                                </button>
                                            </div>
                                            <p class="text-center text-center py-3">
                                                You don't have an account yet?
                                                <a href="register.php" class="fw-bold text-body">
                                                    <u>Sing up</u>
                                                </a>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="../bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>