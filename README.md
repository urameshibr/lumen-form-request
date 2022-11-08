# lumen-form-request

Laravel Form Request adaptation for Lumen framework

### How to install

**Lumen 9 (requires php >= 8.0)**

The package is automatically tagged on version 1.6+ for Lumen 9 projects.

- **Step 1 - Install the package on your project**

```bash
composer require urameshibr/lumen-form-request
```

- **Step 2 - Add the service provider in bootstrap/app.php**

```php
$app->register(Urameshibr\Providers\LumenFormRequestServiceProvider::class);
```

**OBS:** The current package version have a new provider name, if you are updating, you will must to update the provider
name usage on the file `bootstrap/app.php`.

- **Step 3 - Add a required config file used by the package.**

**On root project folder**, run the command bellow for create a required config file:

```bash
php vendor/urameshibr/lumen-form-request/src/run/add-session-config.php
```

After this command, will be created a file `config/session.php` in your project folder.

---

Next step is create your FormRequest and extends from Urameshibr/Requests/FormRequest like the example bellow:

```php
<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class StoreProductRequest extends FormRequest
{
	public function authorize(): bool
	{
		return true;
	}

	public function rules(): array
	{
		return [
		    // your validation rules
		];
	}
}
```

* Link for Laravel Form Request documentation

https://laravel.com/docs/9.x/validation#available-validation-rules

---

---

---

### Old versions

**Lumen 5.5 (requires php >= 5.6)**

```bash
composer require urameshibr/lumen-form-request:1.4
```

**Lumen 5.6+ (requires php >= 5.6)**

```bash
composer require urameshibr/lumen-form-request:1.5
```

* Add the service provider in bootstrap/app.php

```php
$app->register(Urameshibr\Providers\FormRequestServiceProvider::class);
```

Next step is create your FormRequest and extends from Urameshibr/Requests/FormRequest

### Example

```php
<?php

namespace App\Http\Requests;

use Urameshibr\Requests\FormRequest;

class StoreDeviceRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'mac_address' => 'required|unique:devices,mac_address'
		];
	}
}
```

* Link for Laravel Form Request documentation

https://laravel.com/docs/5.4/validation#available-validation-rules

Enjoy!
