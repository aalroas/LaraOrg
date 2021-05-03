@lang('strings.emails.contact.email_body_title')

@lang('validation.attributes.frontend.name'): {{ $request->name }}
@lang('validation.attributes.frontend.email'): {{ $request->email }}
@lang('frontend.phone'): {{ $request->phone ?? 'N/A' }}
@lang('backend.Message'): {{ $request->message }}
