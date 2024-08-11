    <?php

    use App\Http\Controllers\Auth\ResetPasswordController;
    use App\Http\Controllers\CategoryController;
    use App\Http\Controllers\DashboardController;
    use App\Http\Controllers\EventController;
    use App\Http\Controllers\ForgetPasswordController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\ReservationController;
    use App\Http\Controllers\UserController;
    use App\Models\Category;
    use App\Models\Event;
    use App\Models\Reservation;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */


    /*
    |--------------------------------------------------------------------------
    | Home Page
    |--------------------------------------------------------------------------
    */
    Route::get('/', [HomeController::class, 'showHomePage'])->name('home');

    /*
    |--------------------------------------------------------------------------
    | Content Page
    |--------------------------------------------------------------------------
    */
    Route::get('/content/{id}/{categoryId}', [HomeController::class, 'showContentPage'])->name('content.page');


    /*
    |--------------------------------------------------------------------------
    | Content Page
    |--------------------------------------------------------------------------
    */
    Route::get('/events/category/{categoryId}', [CategoryController::class, 'showEventByCategory'])->name('events.category.page');

    Route::middleware('auth')->group(function () {
        /*
       |--------------------------------------------------------------------------
       | Logout process
       |--------------------------------------------------------------------------
       */
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        /*
        |--------------------------------------------------------------------------
        | Reservation process
        |--------------------------------------------------------------------------
        */
        Route::post('/reservation', [ReservationController::class, 'reserve'])->name('reserve.ticket');
    });

    Route::middleware('guest')->group(function () {
        /*
       |--------------------------------------------------------------------------
       | Login page
       |--------------------------------------------------------------------------
       */
        Route::get('/login', [UserController::class, 'showLogin'])->name('login.page');
        /*
       |--------------------------------------------------------------------------
       | Login process
       |--------------------------------------------------------------------------
       */
        Route::post('/login', [UserController::class, 'login'])->name('login.trait');
        /*
       |--------------------------------------------------------------------------
       | Register process
       |--------------------------------------------------------------------------
       */
        Route::post('/register', [UserController::class, 'store'])->name('store.user');
        /*
       |--------------------------------------------------------------------------
       | Register process
       |--------------------------------------------------------------------------
       */
        Route::get('/register', [UserController::class, 'showRegister']);
        /*
       |--------------------------------------------------------------------------
       | Send mail for forgetPassword process
       |--------------------------------------------------------------------------
       */
        Route::post('/sendMail', [ForgetPasswordController::class, 'sendMail'])->name('forgetPassword.trait');
        /*
       |--------------------------------------------------------------------------
       | Forget Password page
       |--------------------------------------------------------------------------
       */
        Route::get('/forgetPassword', [ForgetPasswordController::class, 'showForgetPasswordForm']);
        /*
       |--------------------------------------------------------------------------
       | Reset Password page
       |--------------------------------------------------------------------------
       */
        Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        /*
       |--------------------------------------------------------------------------
       | Reset Password process
       |--------------------------------------------------------------------------
       */
        Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
    });

    Route::group(['middleware' => 'role:organiser'], function () {
        /*
       |--------------------------------------------------------------------------
       | Add event process
       |--------------------------------------------------------------------------
       */
        Route::post('/add/event', [EventController::class, 'store'])->name('add.event');
        /*
       |--------------------------------------------------------------------------
       | Approve reservation process
       |--------------------------------------------------------------------------
       */
        Route::patch('/approve/reservation/{reservationId}', [ReservationController::class, 'approveReservation'])->name('approve.reservation');
        /*
       |--------------------------------------------------------------------------
       | Decline reservation process
       |--------------------------------------------------------------------------
       */
        Route::get('/myEvent/static/{id}/{categoryId}', [HomeController::class, 'showMyEventStaticPage'])->name('static.content.page');

        /*
       |--------------------------------------------------------------------------
       | Organiser events page
       |--------------------------------------------------------------------------
       */
        Route::get('/myEvent', [HomeController::class, 'showMyEventsPage'])->name('myEvents.page');
        /*
       |--------------------------------------------------------------------------
       | Delete Event process
       |--------------------------------------------------------------------------
       */
        Route::delete('/MyEvent/{id}', [EventController::class, 'deleteEvent'])->name('delete.event');
        /*
       |--------------------------------------------------------------------------
       | Update Event process
       |--------------------------------------------------------------------------
       */
        Route::put('/myEvent/{id}', [EventController::class, 'update'])->name('events.update');
    });

    Route::group(['middleware' => 'role:admin'], function () {
        /*
        |--------------------------------------------------------------------------
        | Approve Event process
        |--------------------------------------------------------------------------
        */
        Route::post('/event/approve/{id}', [EventController::class, 'approveEvent'])->name('approve.event');
        /*
        |--------------------------------------------------------------------------
        | Decline Event process
        |--------------------------------------------------------------------------
        */
        Route::post('/event/decline/{id}', [EventController::class, 'declineEvent'])->name('decline.event');
        /*
        |--------------------------------------------------------------------------
        | Event page
        |--------------------------------------------------------------------------
        */
        Route::get('/event', [EventController::class, 'showEvents'])->name('show.event.dashboard');
        /*
          |--------------------------------------------------------------------------
          | Update role process
          |--------------------------------------------------------------------------
         */
        Route::post('/dashboard/update', [DashboardController::class, 'updateRole'])->name('update.role');
        /*
          |--------------------------------------------------------------------------
          | Static page
          |--------------------------------------------------------------------------
          */
        Route::get('/static', [DashboardController::class, 'showStaticPage'])->name('static.dashboard');
        /*
          |--------------------------------------------------------------------------
          | Category page
          |--------------------------------------------------------------------------
          */
        Route::get('/category', [CategoryController::class, 'showCategory'])->name('category.dashboard');
        /*
          |--------------------------------------------------------------------------
          | Ad category process
          |--------------------------------------------------------------------------
        */
        Route::post('/category/add', [CategoryController::class, 'store'])->name('add.category');
        /*
          |--------------------------------------------------------------------------
          | Delete Category process
          |--------------------------------------------------------------------------
        */
        Route::delete('/delete-category/{id}', [CategoryController::class, 'deleteCategory'])->name('delete.category');
        /*
          |--------------------------------------------------------------------------
          | Update Category process
          |--------------------------------------------------------------------------
        */
        Route::put('/update-category/{id}', [CategoryController::class, 'updateCategory'])->name('update.category');

    });
