<template>
    <div>
        <header>
            <h1>My App</h1>
        </header>
        <main>
            <slot />
        </main>
    </div>
</template>

<style>
header {
    background-color: #f5f5f5;
    padding: 16px;
    text-align: center;
}
main {
    padding: 16px;
}
</style>