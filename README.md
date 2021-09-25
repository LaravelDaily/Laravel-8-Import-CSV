## Laravel CSV Import with Matching Fields

A demo project with Laravel 8 and Laravel Excel package, to import CSV file and choose the DB fields to match the CSV column.

For design boilerplate, it uses our [Laravel Breeze Pages Skeleton](https://github.com/LaravelDaily/Laravel-Breeze-Pages-Skeleton).

![Laravel CSV Import - CSV File](https://laraveldaily.com/wp-content/uploads/2021/09/Screenshot-2021-09-25-at-11.24.21.png)

![Laravel CSV Import - Pick Fields](https://laraveldaily.com/wp-content/uploads/2021/09/Screenshot-2021-09-25-at-11.23.39.png)

![Laravel CSV Import - Result Table](https://laraveldaily.com/wp-content/uploads/2021/09/Screenshot-2021-09-25-at-11.23.52.png)

-----

### How to use

Clone this project to your local computer.

```ps
git clone https://github.com/LaravelDaily/Laravel-8-Import-CSV.git
```

Navigate to the project folder.

```ps
cd Laravel-8-Import-CSV
```

Install required packages.

```ps
composer install
```

create new .env file and edit database credentials there.

```ps
cp .env.example .env
```

Generate new app key.

```ps
php artisan key:generate
```

Run migrations. (it has some seeded data for your testing)

```ps
php artisan migrate --seed
```

That's it: launch the main URL

---

## More from our LaravelDaily Team

- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Purchase our [Livewire Kit](https://livewirekit.com)
- Subscribe to our [YouTube channel Laravel Daily](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
