<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-advanced.svg)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![build](https://github.com/yiisoft/yii2-app-advanced/workflows/build/badge.svg)](https://github.com/yiisoft/yii2-app-advanced/actions?query=workflow%3Abuild)

Application Snapshot
-------------------

Home page

![yii2_advanced frontend_homepage](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/aba9af9f-b382-41a3-9b46-67e0bef3efe6)

About page

![yii2_advanced frontend_about](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/ae64c99b-ddd7-4a2a-a9f7-127b89550d2f)

Login page

![yii2_advanced frontend_loginpage](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/9738d9dd-f98e-4aa9-a795-6a635bd7b04e)

Login page - request password

![yii2_advanced frontend_loginpage_requestpassword_reset](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/9b727803-30c2-458a-9d1b-b157369907a5)


Login page - validation

![yii2_advanced frontend_loginpage_validation](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/9dd333bf-615b-4f6e-9244-d0879b4111ac)


![yii2_advanced frontend_loginpage_validation(02)](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/a9dae3a7-c310-4095-9f01-f4c1cbe5cf9d)


![yii2_advanced frontend_loginpage_validation(03)](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/59d18219-4df5-4a0e-a7a1-3866b2500d7a)

Login page - verification email

![yii2_advanced frontend_resend_verificaation_email](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/49f8fe65-9571-4464-8586-b2d02424af64)

Sign up page - validation

![yii2_advanced frontend_signup_page(validation)](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/ffe5d787-b7b8-48bb-b610-da284cd4e3ca)


![yii2_advanced frontend_signup_page(validation_02)](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/54aff626-496b-4e75-b0d6-8d983cee3fbc)


![yii2_advanced frontend_signup_page(validation_03)](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/2d86e75f-d3ea-4e64-aa8d-a8c1adf2fe14)


Sign up page - notification request


![yii2_advanced frontend_signup_page(notification message)](https://github.com/1998Hirushamalith/Yiiu2-Authentication/assets/130145482/293219ba-36bd-4c8d-8216-1a5dfcb6e79e)


DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```
