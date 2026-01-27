<?php

Schema::table('articles', function (Blueprint $table) {
    $table->string('game')->nullable()->after('id');        
    $table->string('type')->default('update')->after('game'); 
});

