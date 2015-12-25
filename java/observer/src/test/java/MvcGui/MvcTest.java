package MvcGui;

import MvcGui.domain.Model;
import MvcGui.gui.View;
import MvcGui.service.Controller;
import org.junit.Test;

import static org.junit.Assert.assertEquals;

public class MvcTest {

    @Test
    public void testModel() {
        Model model = new Model();
        assertEquals(0, model.getValue());
        model.increment();
        assertEquals(1, model.getValue());
    }

    @Test
    public void testMVC() {
        Model model = new Model();
        View view = new View(model);
        Controller controller = new Controller(model);

        assertEquals(0, model.getValue());

        model.addObserver(view);
        view.getButton().doClick();

        assertEquals(1, model.getValue());
    }

}
