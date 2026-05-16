<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Full Result</title>
</head>

<body style="font-family: DejaVu Sans, sans-serif; padding: 30px; color:#333;">

    <h1 style="color:#e31e24;">Full Personality Report</h1>

    <p>
        This report contains your detailed personality insights.
    </p>

    <hr>

    <h2>All Personality Traits</h2>

    @foreach ($attempt->traitResults as $result)

        <div style="margin-bottom:25px;">

            <div style="display:flex; justify-content:space-between;">
                <strong>{{ $result->trait_name }}</strong>
                <strong>{{ $result->percentage }}%</strong>
            </div>

            <div style="width:100%; background:#ddd; height:14px; border-radius:10px;">
                <div
                    style="width:{{ $result->percentage }}%;
                    background:#111;
                    height:14px;
                    border-radius:10px;">
                </div>
            </div>

            <p style="margin-top:10px;">

                @if($result->percentage >= 80)
                    This trait is extremely dominant in your personality.

                @elseif($result->percentage >= 60)
                    This trait is strongly visible in your personality.

                @elseif($result->percentage >= 40)
                    This trait is moderately balanced.

                @else
                    This trait is less dominant currently.

                @endif

            </p>

        </div>

    @endforeach

    <hr>

    <h2>Strengths</h2>

    <ul>
        <li>Strong self-awareness</li>
        <li>Emotional understanding</li>
        <li>Growth mindset</li>
    </ul>

    <hr>

    <h2>Areas to Improve</h2>

    <ul>
        <li>Overthinking</li>
        <li>Self criticism</li>
        <li>Consistency</li>
    </ul>

    <hr>

    <h2>Dominant Trait</h2>

    <div style="
        background:#111;
        color:white;
        padding:20px;
        border-radius:10px;
    ">

        <h3>
            {{ $attempt->traitResults->first()->trait_name ?? 'N/A' }}
        </h3>

        <p>
            Your dominant trait reflects your strongest behavioral tendency.
        </p>

    </div>

</body>

</html>