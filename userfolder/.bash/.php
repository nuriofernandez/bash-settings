# Only for mac
if [ "$(uname -s)" = "Darwin" ]; then
    export PATH="/opt/homebrew/opt/php@8.3/bin:$PATH"
    export PATH="/opt/homebrew/opt/php@8.3/sbin:$PATH"

    export LDFLAGS="-L/opt/homebrew/opt/php@8.3/lib"
    export CPPFLAGS="-I/opt/homebrew/opt/php@8.3/include"
fi