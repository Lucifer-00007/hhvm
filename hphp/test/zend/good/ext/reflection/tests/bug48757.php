<?hh
<<__DynamicallyCallable>>
function test() {
    echo "Hello World\n";
}
<<__DynamicallyCallable>>
function another_test($parameter) {
    var_dump($parameter);
}
<<__EntryPoint>> function main(): void {
$func = new ReflectionFunction('test');
$func->invoke();

$func = new ReflectionFunction('another_test');
$func->invoke('testing');
}
