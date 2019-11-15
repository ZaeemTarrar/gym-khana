<?php

        use Illuminate\Http\Request;
        
        /*
        |--------------------------------------------------------------------------
        | API Routes
        |--------------------------------------------------------------------------
        |
        | Here is where you can register API routes for your application. These
        | routes are loaded by the RouteServiceProvider within a group which
        | is assigned the "api" middleware group. Enjoy building your API!
        |

        // Route::middleware('auth:api')->get('/user', function (Request $request) {
            //     return $request->user();
            // });
            

        */
        Route::resource("role", "RolesController");Route::resource("subrole", "SubrolesController");Route::resource("user", "UsersController");Route::resource("profile", "ProfilesController");Route::resource("address", "AddressesController");Route::resource("notificationtype", "NotificationtypesController");Route::resource("notification", "NotificationsController");Route::resource("department", "DepartmentsController");Route::resource("service", "ServicesController");Route::resource("productservice", "ProductservicesController");Route::resource("productcategory", "ProductcategoriesController");Route::resource("product", "ProductsController");Route::resource("day", "DaysController");Route::resource("slot", "SlotsController");Route::resource("orderpack", "OrderpacksController");Route::resource("order", "OrdersController");Route::resource("paymentmethod", "PaymentmethodsController");Route::resource("payment", "PaymentsController");Route::resource("attendance", "AttendancesController");Route::resource("leave", "LeavesController");Route::resource("emppayment", "EmppaymentsController");Route::resource("percentage", "PercentagesController");