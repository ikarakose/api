<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //apilerden gelen ürün idsi
            $table->bigInteger("aid")->nullable();
            $table->string("stockid")->nullable();
            $table->string("name");
            $table->string("slug");
            $table->string("image")->nullable();
            $table->integer("category");
            $table->integer("qty")->nullable();
            $table->decimal("price",12,2)->nullable();
            $table->string("pricetype")->nullable();
            $table->string("priceicon")->nullable();
            $table->string("country",10)->nullable();
            $table->text("notes")->nullable();
            $table->text("description")->nullable();
            $table->string("marketid")->nullable();
            $table->string("marketname")->nullable();
            $table->string("marketnumber")->nullable();
            $table->string("marketurl")->nullable();
            $table->string("marketcategory")->nullable();
            $table->integer("marketqty")->nullable();
            $table->decimal("marketprice",12,2)->nullable();
            $table->decimal("marketsaleprice",12,2)->nullable();
            $table->string("marketstatus")->nullable();
            $table->string("marketlink")->nullable();
            $table->string("sin")->nullable();
            $table->integer("linked")->nullable();
            $table->integer("onsale")->nullable();
            $table->integer("publish")->nullable();
            $table->integer("active")->nullable();
            $table->dateTime("open")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
