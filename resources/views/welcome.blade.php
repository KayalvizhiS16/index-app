<!DOCTYPE html>
Schema::create('table_name', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name');
    $table->text('description')->nullable();
    $table->timestamps();
});
