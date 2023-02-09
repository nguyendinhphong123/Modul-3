<?php
class Baser
public final function show(){
echo "Base: :show() called.";
}
}
 class Derived extends Base{

public function a(){
echo "Derived: :show() called.";
}
 }
sbase = new Derived () ;
Sbase->a ( ) ;