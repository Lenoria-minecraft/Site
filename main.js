function copyToClipBoard(content) {
    navigator.clipboard.writeText(content);
    alert("Copied!");
}