<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'Το :attribute πρέπει να είναι αποδεκτή.',
    'active_url'           => 'Η :η ιδιότητα δεν είναι έγκυρη διεύθυνση URL.',
    'after'                => 'Το :attribute πρέπει να είναι η ημερομηνία μετά την ημερομηνία.',
    'alpha'                => 'Η :το χαρακτηριστικό μπορεί να περιέχει μόνο γράμματα.',
    'alpha_dash'           => 'Η :το χαρακτηριστικό μπορεί να περιέχει μόνο γράμματα, αριθμούς και παύλες.',
    'alpha_num'            => 'Η :το χαρακτηριστικό μπορεί να περιέχει μόνο γράμματα και αριθμούς.',
    'array'                => 'Το :attribute πρέπει να είναι ένα array.',
    'before'               => 'Το :attribute πρέπει να είναι μια ημερομηνία πριν από την ημερομηνία.',
    'between'              => [
        'numeric' => 'Το :attribute πρέπει να είναι μεταξύ :min :max.',
        'file'    => 'Το :attribute πρέπει να είναι μεταξύ :min :max kilobyte.',
        'string'  => 'Το :attribute πρέπει να είναι μεταξύ :min :max χαρακτήρες.',
        'array'   => 'Το :χαρακτηριστικό που πρέπει να έχουν μεταξύ :min :max στοιχεία.',
    ],
    'boolean'              => 'Το :χαρακτηριστικό πεδίο πρέπει να είναι true ή false.',
    'confirmed'            => 'Το :χαρακτηριστικό επιβεβαίωσης δεν ταιριάζουν.',
    'date'                 => 'Η :η ιδιότητα δεν είναι έγκυρη ημερομηνία.',
    'date_format'          => 'Η :το χαρακτηριστικό δεν ταιριάζει με τη μορφή :μορφή.',
    'different'            => 'Η :η ιδιότητα και :άλλα πρέπει να είναι διαφορετική.',
    'digits'               => 'Το :attribute πρέπει να είναι :ψηφία ψηφία.',
    'digits_between'       => 'Το :attribute πρέπει να είναι μεταξύ :min :max ψηφία.',
    'distinct'             => 'Το :χαρακτηριστικό πεδίο έχει μια διπλότυπη τιμή.',
    'email'                => 'Το :attribute πρέπει να είναι μια έγκυρη διεύθυνση ηλεκτρονικού ταχυδρομείου.',
    'exists'               => 'Το επιλεγμένο :το χαρακτηριστικό δεν είναι έγκυρη.',
    'filled'               => 'Το :χαρακτηριστικό το πεδίο είναι υποχρεωτικό.',
    'image'                => 'Το :attribute πρέπει να είναι μια εικόνα.',
    'in'                   => 'Το επιλεγμένο :το χαρακτηριστικό δεν είναι έγκυρη.',
    'in_array'             => 'Το :χαρακτηριστικό πεδίο δεν υπάρχει στο :άλλο.',
    'integer'              => 'Το :attribute πρέπει να είναι ένας ακέραιος.',
    'ip'                   => 'Το :attribute πρέπει να είναι μια έγκυρη διεύθυνση IP.',
    'json'                 => 'Το :attribute πρέπει να είναι ένα έγκυρο JSON string.',
    'max'                  => [
        'numeric' => 'Η :το χαρακτηριστικό δεν μπορεί να είναι μεγαλύτερη από :max.',
        'file'    => 'Η :το χαρακτηριστικό δεν μπορεί να είναι μεγαλύτερη από :max kilobyte.',
        'string'  => 'Η :το χαρακτηριστικό δεν μπορεί να είναι μεγαλύτερη από :max χαρακτήρες.',
        'array'   => 'Η :το χαρακτηριστικό δεν μπορεί να έχει περισσότερα από :max στοιχεία.',
    ],
    'mimes'                => 'Το :attribute πρέπει να είναι ένα αρχείο τύπου: :αξίες.',
    'min'                  => [
        'numeric' => 'Το :attribute πρέπει να είναι τουλάχιστον :min.',
        'file'    => 'Το :attribute πρέπει να είναι τουλάχιστον :min kilobyte.',
        'string'  => 'Το :attribute πρέπει να είναι τουλάχιστον :min χαρακτήρες.',
        'array'   => 'Η :το χαρακτηριστικό πρέπει να έχει τουλάχιστον :min στοιχεία.',
    ],
    'not_in'               => 'Το επιλεγμένο :το χαρακτηριστικό δεν είναι έγκυρη.',
    'numeric'              => 'Το :attribute πρέπει να είναι ένας αριθμός.',
    'present'              => 'Το :χαρακτηριστικό πεδίο πρέπει να είναι παρόν.',
    'regex'                => 'Η :το χαρακτηριστικό σχήμα είναι άκυρη.',
    'required'             => 'Το :χαρακτηριστικό το πεδίο είναι υποχρεωτικό.',
    'required_if'          => 'Το :χαρακτηριστικό του πεδίου είναι απαραίτητη όταν :άλλες είναι :η τιμή.',
    'required_unless'      => 'Το :χαρακτηριστικό πεδίο είναι υποχρεωτικό εκτός αν :άλλες είναι οι αξίες.',
    'required_with'        => 'Το :χαρακτηριστικό του πεδίου είναι απαραίτητη όταν :οι τιμές είναι παρούσα.',
    'required_with_all'    => 'Το :χαρακτηριστικό του πεδίου είναι απαραίτητη όταν :οι τιμές είναι παρούσα.',
    'required_without'     => 'Το :χαρακτηριστικό του πεδίου είναι απαραίτητη όταν :αξίες που δεν είναι του παρόντος.',
    'required_without_all' => 'Το :χαρακτηριστικό του πεδίου είναι απαραίτητη όταν κανείς :οι τιμές είναι παρόντες.',
    'same'                 => 'Η :η ιδιότητα και :άλλα πρέπει να ταιριάζουν.',
    'size'                 => [
        'numeric' => 'Το :attribute πρέπει να είναι :το μέγεθος.',
        'file'    => 'Το :attribute πρέπει να είναι :μέγεθος kilobyte.',
        'string'  => 'Το :attribute πρέπει να είναι :μέγεθος χαρακτήρων.',
        'array'   => 'Η :το χαρακτηριστικό αυτό πρέπει να περιλαμβάνει :στοιχεία μεγέθους.',
    ],
    'string'               => 'Το :attribute πρέπει να είναι ένα string.',
    'timezone'             => 'Το :attribute πρέπει να είναι μια έγκυρη ζώνη.',
    'unique'               => 'Η :η ιδιότητα δεν έχει ήδη ληφθεί.',
    'url'                  => 'Η :το χαρακτηριστικό σχήμα είναι άκυρη.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-μήνυμα',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];