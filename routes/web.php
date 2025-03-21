<?php

use App\Http\Controllers\admin\CategorieController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\OeuvreController;

//Gestion des oeuvres
Route::get('/admin/oeuvres/liste', [OeuvreController::class, 'liste'])->name('admin.oeuvres.liste');

Route::get('/admin/oeuvres/ajouter',[OeuvreController::class, 'ajouter'])->name('admin.oeuvres.ajouter');

Route::post('/admin/oeuvres/ajouter/traitement',[OeuvreController::class, 'ajouter_traitement'])->name('admin.oeuvres.ajouter_traitement');

Route::get('/admin/oeuvres/modifier/{id}',[OeuvreController::class, 'modifier'])->name('admin.oeuvres.modifier');

Route::post('/admin/oeuvres/modifier/traitement/{id}',[OeuvreController::class, 'modifier_traitement'])->name('admin.oeuvres.modifier_traitement');

Route::delete('/admin/oeuvres/supprimer',[OeuvreController::class, 'supprimer'])->name('admin.oeuvres.supprimer');

//Gestion des catégories
Route::get('/admin/categories/liste', [CategorieController::class, 'liste'])->name('admin.categories.liste');

Route::get('/admin/categories/ajouter',[CategorieController::class, 'ajouter'])->name('admin.categories.ajouter');

Route::post('/admin/categories/ajouter/traitement',[CategorieController::class, 'ajouter_traitement'])->name('admin.categories.ajouter_traitement');

Route::get('/admin/categories/modifier/{id}',[CategorieController::class, 'modifier'])->name('admin.categories.modifier');

Route::post('/admin/categories/modifier/traitement/{id}',[CategorieController::class, 'modifier_traitement'])->name('admin.categories.modifier_traitement');

Route::delete('/admin/categories/supprimer',[CategorieController::class, 'supprimer'])->name('admin.categories.supprimer');