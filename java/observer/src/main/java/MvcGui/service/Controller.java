package MvcGui.service;

import MvcGui.domain.Model;
import MvcGui.gui.View;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class Controller implements ActionListener {

    private Model model;

    public static void main(String[] args) {
        Model model = new Model();
        View view = new View(model);

        model.addObserver(view);
    }

    public Controller(Model model) {
        this.model = model;
    }

    public void actionPerformed(ActionEvent e) {
        model.increment();
    }
}
