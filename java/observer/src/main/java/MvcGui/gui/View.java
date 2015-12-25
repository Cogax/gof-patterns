package MvcGui.gui;

import MvcGui.domain.Model;
import MvcGui.service.Controller;

import javax.swing.*;
import java.util.Observable;
import java.util.Observer;

public class View extends JFrame implements Observer {

    private JButton button;

    public View(Model model) {
        super("My Window");

        button = new JButton(new Integer(model.getValue()).toString());
        button.addActionListener(new Controller(model));
        getContentPane().add(button);
        setSize(300, 100);
        setVisible(true);
    }

    public void update(Observable model, Object arg) {
        button.setText(new Integer(((Model) model).getValue()).toString());
    }

    public JButton getButton() {
        return button;
    }
}
