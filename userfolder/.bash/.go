# Only for mac
if [ "$(uname -s)" = "Darwin" ]; then
	export GOPATH=/Users/nurio/go/gopath
	# export GOPRIVATE=gitlab.com/eslfaceitgroup/*
	export PATH=$PATH:$GOPATH/bin
	export GOBIN=$(go env GOPATH)/bin
fi