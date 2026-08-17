<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>New Lead Received | Wecodely</title>
    </head>

    <body style="margin: 0; padding: 0; background-color: #f5f5f5; font-family: Arial, sans-serif;">

        <div style="max-width: 600px; margin: 40px auto; padding: 0 20px;">

            <div style="background: #ffffff; border-radius: 12px; padding: 30px;">

                <h1 style="margin: 0 0 8px; font-size: 24px; color: #111827;">
                    New Lead Received
                </h1>

                <p style="margin: 0 0 25px; color: #6b7280; font-size: 14px;">
                    A new enquiry has been submitted through the Wecodely website.
                </p>

                <div style="border-top: 1px solid #e5e7eb; padding-top: 20px;">

                    <p>
                        <strong>WhatsApp:</strong>
                        {{ $lead->whatsapp }}
                    </p>

                    <p>
                        <strong>Intent:</strong>
                        {{ ucfirst($lead->intent) }}
                    </p>

                    @if ($lead->message)
                        <p>
                            <strong>Message:</strong><br>
                            {{ $lead->message }}
                        </p>
                    @endif

                    @if ($lead->landing_page)
                        <p>
                            <strong>Landing Page:</strong><br>
                            {{ $lead->landing_page }}
                        </p>
                    @endif

                    @if ($lead->utm_source)
                        <p>
                            <strong>UTM Source:</strong>
                            {{ $lead->utm_source }}
                        </p>
                    @endif

                    @if ($lead->utm_medium)
                        <p>
                            <strong>UTM Medium:</strong>
                            {{ $lead->utm_medium }}
                        </p>
                    @endif

                    @if ($lead->utm_campaign)
                        <p>
                            <strong>UTM Campaign:</strong>
                            {{ $lead->utm_campaign }}
                        </p>
                    @endif

                    @if ($lead->utm_content)
                        <p>
                            <strong>UTM Content:</strong>
                            {{ $lead->utm_content }}
                        </p>
                    @endif

                </div>

                <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid #e5e7eb;">

                    <p style="margin: 0; color: #6b7280; font-size: 13px;">
                        Submitted at:
                        {{ $lead->created_at?->format('F j, Y g:i A') }}
                    </p>

                </div>

            </div>

        </div>

    </body>

</html>
