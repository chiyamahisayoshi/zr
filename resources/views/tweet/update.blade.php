<a href="{{ route('tweet.index') }}">< 戻る</a>
    <p>投稿フォーム</p>
    @if (session('feedback.success'))
    <p style="color: green">{{ session('feedback.success') }}</p>
    @endif