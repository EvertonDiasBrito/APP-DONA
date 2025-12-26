const { app , BrowserWindow, Menu } = require('electron');

//* WINDOW CREATION *//
var mainWindow = null;
async function createWindow(){
    mainWindow = new BrowserWindow({
        width: 800,
        height: 600,
        
    });
    
    await mainWindow.loadURL("http://localhost/appdona/src/pages/editor/index.html");

}

//TEMPLATE MENU*//
const templateMenu = [
    {
        label: 'Arquivo',
        submenu: [
            {
                label: 'Novo Arquivo'
            },
            {
                label: 'Abrir'
            },
            {
                label: 'Salvar'
            },
            {
                label: 'Salvar Como'
            },
            {
                label: 'Sair',
                role:process.platform === "darwin" ? "close" : 'quit'
            },
        ]
    }
];

//MENU BUILD*//
const menu = Menu.buildFromTemplate(templateMenu);
Menu.setApplicationMenu(menu);

// ON READY*//
app.whenReady().then(createWindow);

//ACTIVAR APLLE *//
app.on('activate',()=>{
    if(BrowserWindow.getAllWindows().length === 0){
        createWindow();
    }
}); 