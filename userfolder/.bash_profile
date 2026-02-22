# Disable new MacOs Catalina Terminal warning
export BASH_SILENCE_DEPRECATION_WARNING=1

# Source all files in .bash folder
for file in ~/.bash/.*; do
    # Check if it's a regular file before sourcing
    if [[ -f "$file" ]]; then
        source "$file"
    fi
done
