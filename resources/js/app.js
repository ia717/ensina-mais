import "./bootstrap";
import Alpine from "alpinejs";
import persist from "@alpinejs/persist";
import "flowbite";

window.Alpine = Alpine;

Alpine.plugin(persist);

Alpine.start();


