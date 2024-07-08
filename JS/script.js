document.getElementById('addTaskButton').addEventListener('click', function() {
    const newTask = document.createElement('li');
    newTask.textContent = 'Nouvelle tâche';
    newTask.style.padding = '8px';
    newTask.style.backgroundColor = '#f4f4f4';
    newTask.style.margin = '5px 0';
    newTask.style.border = '1px solid #ddd';
    document.getElementById('myList').appendChild(newTask);
});

document.getElementById('removeTaskButton').addEventListener('click', function() {
    const list = document.getElementById('myList');
    if (list.children.length > 0) {
        list.removeChild(list.lastChild);
    }
});

document.getElementById('highlightTaskButton').addEventListener('click', function() {
    const firstTask = document.querySelector('#myList li');
    if (firstTask) {
        firstTask.style.backgroundColor = 'yellow';
    }
});
