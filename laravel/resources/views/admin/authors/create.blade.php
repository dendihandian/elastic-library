@formField('input', [
    'name' => 'first_name',
    'label' => 'First name',
    // 'required' => true,
])

@formField('input', [
    'name' => 'last_name',
    'label' => 'Last name',
    'required' => true,
])

{{-- @formField('input', [
    'name' => $titleFormKey ?? 'title',
    'label' => $titleFormKey === 'title' ? twillTrans('twill::lang.modal.title-field') : ucfirst($titleFormKey),
    'translated' => $translateTitle ?? false,
    'required' => true,
    'onChange' => 'formatPermalink'
])

@if ($permalink ?? true)
    @formField('input', [
        'name' => 'slug',
        'label' => twillTrans('twill::lang.modal.permalink-field'),
        'translated' => true,
        'ref' => 'permalink',
        'prefix' => $permalinkPrefix ?? ''
    ])
@endif --}}
