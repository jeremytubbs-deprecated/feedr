# Feedr Contribution Guide

This page contains guidelines for contributing to Feedr

## How to start


1. Fork [Feedr](http://github.com/indy-laravel/feedr)
2. To get started contributing to Feedr, you'll need a [fresh install](http://laravel.com/docs/installation#install-laravel) of laravel. If you already have composer installed...
    ```
    composer create-project laravel/laravel [directory] --prefer-dist
    cd [directory]
    php artisan workbench indy-laravel/feedr --resources # Ignore the error
    rm -rf workbench/indy-laravel/feedr/*
    rm -rf workbench/indy-laravel/feedr/.*
    cd workbench/indy-laravel/feedr
    git clone git@github.com:[your-github-account]/feedr.git .
    ```
3. Create a new branch
    ```
    git checkout -b 'branchName'
    ```
4. Write code
5. Commit back to your fork
6. Submit a pull request

## Coding Guidelines

Feedr follows the [PSR-0](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md) and [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) coding standards. In addition to these standards, below is a list of other coding standards that should be followed:

- Namespace declarations should be on the same line as `<?php`.
- Class opening `{` should be on the same line as the class name.
- Function and control structure opening `{` should be on a separate line.
- Interface names are suffixed with `Interface` (`FooInterface`)
