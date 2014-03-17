#Feedr

## Want to contribute?

Great!  Take a look at the CONTRIBUTING.md file for details on how to contribute

## Installation

Add the the service provider to the providers array in `app/config/app.php`:

	'IndyLaravel\Feedr\FeedrServiceProvider'

Add the following entry entry to the aliases array in `app/config/app.php`:

	'Feedr'			  => 'IndyLaravel\Feedr\Facades\Feedr'

## Usage

Show a Hello Feedr message:

	{{ Feedr::show() }}

## License

Feedr is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
