# Social Media Platform

It is a demo project for demonstrating what can be generated with new 2019 version of [QuickAdminPanel](https://2019.quickadminpanel.com) tool. This boilerplate was fully __generated__, without adding any custom line of code.

## What's inside

- Adminpanel based on [CoreUI theme](https://coreui.io/): with default one admin user (_admin@admin.com/password_) and two roles
- Users/Roles/permissions management function (based on our own code similar to Spatie Roles-Permissions)
- One demo CRUD for Products management - name/description/price
- Everything that is needed for CRUDs: model+migration+controller+requests+views

From that boilerplate you can manually create more CRUDs, assign permissions etc. Or use our [online generator](https://2019.quickadminpanel.com) for this.

## Screenshots

![Laravel + CoreUI screenshot 01](https://millionk.com/assets/images/millionk1.PNG)

![Laravel + CoreUI screenshot 02](https://millionk.com/assets/images/millionk2.PNG)

![Laravel + CoreUI screenshot 03](https://millionk.com/assets/images/millionk3.PNG)

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)

## License

Basically, feel free to use and re-use any way you want.
