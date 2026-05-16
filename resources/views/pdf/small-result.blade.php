<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Small Result</title>
</head>

<body style="font-family: DejaVu Sans, sans-serif; padding: 30px; color:#333;">

    <h1 style="color:#e31e24;">Personality Result</h1>

    <p>
        As a <strong>Personality Type</strong>, you possess a unique blend of traits.
    </p>

    <hr>

    <h2>Personality Traits</h2>

    @foreach ($attempt->traitResults as $result)

        <div style="margin-bottom:20px;">

            <div style="display:flex; justify-content:space-between;">
                <strong>{{ $result->trait_name }}</strong>
                <strong>{{ $result->percentage }}%</strong>
            </div>

            <div style="width:100%; background:#ddd; height:12px; border-radius:10px;">
                <div
                    style="width:{{ $result->percentage }}%;
                    background:#e31e24;
                    height:12px;
                    border-radius:10px;">
                </div>
            </div>

        </div>

    @endforeach

    <hr>

    <h3>Dominant Trait</h3>

    <p style="font-size:22px; color:#e31e24;">
        {{ $attempt->traitResults->first()->trait_name ?? 'N/A' }}
    </p>

</body>

</html>