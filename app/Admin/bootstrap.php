<?php
use Encore\Admin\Form;
use App\Admin\Extensions\Form\CKEditor;
use App\Admin\Extensions\Form\Editor;
use App\Admin\Extensions\PHPEditor;
/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

// Form::forget(['map', 'editor']);
// Form::extend('editor', Editor::class);
Form::extend('ckeditor', CKEditor::class);
Form::extend('php', PHPEditor::class);
