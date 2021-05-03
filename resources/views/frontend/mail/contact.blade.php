<p>@lang('strings.emails.contact.email_body_title')</p>

<p><strong>@lang('validation.attributes.frontend.name'):</strong> {{ $request->name }}</p>
<p><strong>@lang('validation.attributes.frontend.email'):</strong> {{ $request->email }}</p>
<p><strong>@lang('frontend.phone'):</strong> {{ $request->phone ?? 'N/A' }}</p>
<p><strong>@lang('backend.Message'):</strong> {{ $request->message }}</p>
